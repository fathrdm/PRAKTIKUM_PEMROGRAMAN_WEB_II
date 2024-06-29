package com.example.UASMOBILE

import android.os.Parcelable
import kotlinx.parcelize.Parcelize

@Parcelize
data class Data(
    val duration: String,
    val episodes: Int,
    val favorites: Int,
    val genres: List<AnimeGenre>,
    val images: Animeimages,
    val members: Int,
    val popularity: Int,
    val producers: List<AnimeProducer>,
    val rank: Int,
    val rating: String,
    val score: Double,
    val scored_by: Int,
    val season: String,
    val source: String,
    val status: String,
    val studios: List<AnimeStudio>,
    val synopsis: String,
    val title: String,
    val title_english: String,
    val title_japanese: String,
    val type: String,
    val url: String,
    val year: Int
) : Parcelable

@Parcelize
data class AnimeGenre(val name: String,
                      val type: String,
                      val url: String) : Parcelable

@Parcelize
data class Animeimages(val jpg: Jpganime) : Parcelable

@Parcelize
data class Jpganime(val image_url: String,
                    val large_image_url: String,
                    val small_image_url: String) : Parcelable

@Parcelize
data class AnimeProducer(val name: String,
                         val type: String,
                         val url: String) : Parcelable

@Parcelize
data class AnimeStudio(val name: String) : Parcelable

data class Genre(
    val mal_id: Int,
    val name: String,
    val type: String,
    val url: String
)
data class Images(
    val jpg: Jpg,
)
data class Jpg(
    val image_url: String,
    val large_image_url: String,
    val small_image_url: String
)
data class Producer(
    val mal_id: Int,
    val name: String,
    val type: String,
    val url: String
)
data class Studio(
    val mal_id: Int,
    val name: String,
    val type: String,
    val url: String
)