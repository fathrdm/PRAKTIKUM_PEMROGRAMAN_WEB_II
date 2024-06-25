package com.example.UASMOBILE

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.GridLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.UASMOBILE.databinding.ActivityMainBinding
import com.example.UASMOBILE.service.AnimeService
import com.squareup.picasso.Picasso
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response
import android.content.Intent
import android.util.Log

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        val binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)
        binding.apply {
            val animeService = AnimeService.create()
            val call = animeService.getTopAnimes()

            call.enqueue(object : Callback<AnimeTop> {
                override fun onResponse(call: Call<AnimeTop>, response: Response<AnimeTop>) {
                    if (response.isSuccessful) {
                        val top = response.body()?.data
                        Log.d("MainActivity", "Jumlah data anime: ${top?.size}")
                        animeRecyclerView.adapter = AnimeAdapter(this@MainActivity, top ?: emptyList())
                        animeRecyclerView.layoutManager = GridLayoutManager(this@MainActivity, 1)
                    } else {
                        Log.e("MainActivity", "Gagal mendapatkan data: ${response.message()}")
                    }
                }

                override fun onFailure(call: Call<AnimeTop>, t: Throwable) {
                    Log.e("MainActivity", "Error: ${t.message}", t)
                }
            })
            }
        }
    }
class AnimeAdapter(
    private val parentActivity: AppCompatActivity,
    private val animes: List<Data>
) : RecyclerView.Adapter<AnimeAdapter.CustomViewHolder>() {

    inner class CustomViewHolder(view: View) : RecyclerView.ViewHolder(view)

    override fun onCreateViewHolder(
        parent: ViewGroup,
        viewType: Int
    ): CustomViewHolder {
        val view = LayoutInflater.from(parent.context)
            .inflate(R.layout.anime_item_layout, parent, false)
        return CustomViewHolder(view)
    }

    override fun onBindViewHolder(holder: CustomViewHolder, position: Int) {
        val anime = animes[position]
        val view = holder.itemView

        val name = view.findViewById<TextView>(R.id.name)
        val memberanime = view.findViewById<TextView>(R.id.members)
        val episodeanime = view.findViewById<TextView>(R.id.episodes)
        val image = view.findViewById<ImageView>(R.id.image)
        val type = view.findViewById<TextView>(R.id.type)
        val Ranked = view.findViewById<TextView>(R.id.Ranking)
        val Score = view.findViewById<TextView>(R.id.Scorelayout)

        Score.text = anime.score.toString()
        name.text = anime.title
        Ranked.text = String.format("%d", anime.rank)
        type.text = String.format("Type: %s", anime.type)
        memberanime.text = "%s users".format(anime.scored_by)
        episodeanime.text = String.format("(%d)", anime.episodes)
        Picasso.get().load(anime.images.jpg.image_url).into(image)
        view.setOnClickListener {
            val intent = Intent(parentActivity, AnimeDetailActivity::class.java)
            intent.putExtra("anime", anime)
            parentActivity.startActivity(intent)
        }
    }
    override fun getItemCount(): Int {
        return animes.size
    }

}


