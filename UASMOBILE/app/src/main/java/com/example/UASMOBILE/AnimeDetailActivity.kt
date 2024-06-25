package com.example.UASMOBILE

import android.content.Intent
import android.media.Image
import android.media.Rating
import android.net.Uri
import android.os.Bundle
import android.util.Log
import android.widget.Button
import android.widget.ImageButton
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.UASMOBILE.databinding.DetailTopAnimeBinding
import com.squareup.picasso.Picasso

class AnimeDetailActivity : AppCompatActivity() {

    private lateinit var binding: DetailTopAnimeBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = DetailTopAnimeBinding.inflate(layoutInflater)
        setContentView(binding.root)

        val secondActButton = findViewById<ImageButton>(R.id.toolbar)
        secondActButton.setOnClickListener {
            val intent = Intent(this, MainActivity::class.java)
            startActivity(intent)
        }

        val anime: Data? = intent.getParcelableExtra("anime")
        if (anime == null) {
            Log.e("DetailTopAnimeBinding", "Anime null dari intent")
            Toast.makeText(this, "Anime tidak ditemukan", Toast.LENGTH_SHORT).show()
            finish()
        } else {
            binding.apply {
                Picasso.get().load(anime.images.jpg.image_url).into(image)
                name.text = anime.title
                Score.text = anime.score.toString()
                Ranked.text = String.format("Ranking #%d", anime.rank)
                Popularitas.text = String.format("Popularity: #%d", anime.popularity)
                byuser.text = "%s users".format(anime.scored_by)
                Japanese.text = String.format("Japanese: %s", anime.title_japanese)
                English.text = String.format("English: %s", anime.title_english)
                //Synopsis
                Sinopsis.text = anime.synopsis
                //Information Anime
                type.text = String.format("Type: %s", anime.type)
                Episode.text = String.format("Episodes: #%d", anime.episodes)
                Status.text = anime.status.toString()
                val producersText = buildString {
                    if (anime.producers.isNotEmpty()) {
                        append("Producers: ${anime.producers[0].name}")
                        for (i in 1 until minOf(anime.producers.size, 10)) {
                            append(", ${anime.producers[i].name}")
                        }
                    } else {
                        append("No producers available")
                    }
                }
                Peoducers.text = producersText
                Peoducers.text = "Producers: $producersText"
                Studios.text = anime.studios[0].name
                Source.text = anime.source
                val genresText = buildString {
                    if (anime.genres.isNotEmpty()) {
                        append("Producers: ${anime.genres[0].name}")
                        for (i in 1 until minOf(anime.genres.size, 10)) {
                            append(", ${anime.genres[i].name}")
                        }
                    } else {
                        append("No genres available")
                    }
                }
                Genres.text = genresText
                Genres.text = "Genre: $genresText"
                Duration.text = String.format("Duration: %s", anime.duration)
                Rating.text = String.format("Rating: %s", anime.rating)
            }
        }
    }
}