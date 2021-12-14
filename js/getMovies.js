const APIKEY = "api_key=8ef726b0d448ac5baef1bcf1fdbc77ae";

async function getMovies() {
  let movies = await fetch(
    `https://api.themoviedb.org/3/movie/popular?${APIKEY}&language=fr_FR&page=1`
  ).then((response) => response.json());

  return movies;
}

getMovies().then((response) => {
  const movies = response.results;
  movies.forEach((movie) => {
    $(".movies_container").append(
      `<div>
      <a href="/tp_film/views/movie.php?id=${movie.id}" id="ma_list">${movie.title}
        <img src= "http://image.tmdb.org/t/p/w300/${movie.poster_path}">
     </a>
      </div>`
    );
  });
});

// ("https://api.themoviedb.org/3/movie/76341?api_key=8ef726b0d448ac5baef1bcf1fdbc77ae");
