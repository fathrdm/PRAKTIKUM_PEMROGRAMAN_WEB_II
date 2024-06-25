package com.example.UASMOBILE.service

import com.example.UASMOBILE.AnimeTop
import retrofit2.Call
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory
import retrofit2.http.GET

interface AnimeService {

    @GET("top/anime")
    fun getTopAnimes(): Call<AnimeTop>

//    @GET("search/anime")
//    fun getSearchedAnime(@Query("q")queryString: String): Call<SearchedAnime>

    companion object {
        val BASE_URL = "https://api.jikan.moe/v4/"

        fun create(): AnimeService {
            val retrofit = Retrofit.Builder()
                .addConverterFactory(GsonConverterFactory.create())
                .baseUrl(BASE_URL)
                .build()
            return retrofit.create(AnimeService::class.java)
        }
    }

}