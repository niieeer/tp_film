async function getMovie() {
  let movies = await fetch(
    "https://api.themoviedb.org/3/movie/" +
      id +
      "?api_key=8ef726b0d448ac5baef1bcf1fdbc77ae&language=en-US&append_to_response=videos"
  ).then((response) => response.json());

  return movies;
}

window.addEventListener("DOMContentLoaded", async () => {
  getMovie().then((response) => {
    const movie = response;
    $(".movie-container").append(`<div>
 <h2>${movie.title}</h2>
  <img src= "http://image.tmdb.org/t/p/w300/${movie.poster_path}">
  <p>${movie.overview}</p>
  <p>${movie.original_language}</p>
  <p>${movie.vote_average}</p>
  </div>`);
    $(".movie-container").append(`<div id="genres"></div>`);
    movie.genres.forEach((element) => {
      $("#genres").append(`<p>${element.name}</p>`);
    });
  });
});

// sa version originale, son titre, son
// image de présentation, sa moyenne de vote, ses genres et sa potentielle vidéo de
// présentation
