// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
      args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}
// throttle

const searchAndDisplayMoviesDebounced = debounce(
  searchAndDisplayMovies,
  500,
  false
);

function searchMovies(search) {
  return fetch(
    "https://api.themoviedb.org/3/search/movie?api_key=8ef726b0d448ac5baef1bcf1fdbc77ae&query=" +
      search +
      "&language=en-US&page=1&include_adult=false"
  ).then((response) => response.json());
}

async function searchAndDisplayMovies(search = "") {
  const { results: movies } = await searchMovies(search);
  displayMovies(movies);
}

function displayMovies(movies) {
  $(".movies_container").empty();
  movies.forEach((movie) => {
    $(".movies_container").append(`<div>
        <a href="/tp_film/views/movie.php?id=${movie.id}" id="ma_list">${movie.title}</a>
        <img src= "http://image.tmdb.org/t/p/w300/${movie.poster_path}">
        </div>`);
  });
}

// Attendre que la page soit pretre pour executer le JS
window.addEventListener("DOMContentLoaded", async () => {
  // searchAndDisplayMovies();

  const input = document.getElementById("searchText");
  input.addEventListener("input", async (e) => {
    const search = e.target.value;
    searchAndDisplayMoviesDebounced(search);
  });
});
