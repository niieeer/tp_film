// APIKEY pour l'api
const APIKEY = "api_key=8ef726b0d448ac5baef1bcf1fdbc77ae";

// Tableau des genres de l'api
const genres = [
  {
    id: 28,
    name: "Action",
  },
  {
    id: 12,
    name: "Adventure",
  },
  {
    id: 16,
    name: "Animation",
  },
  {
    id: 35,
    name: "Comedy",
  },
  {
    id: 80,
    name: "Crime",
  },
  {
    id: 99,
    name: "Documentary",
  },
  {
    id: 18,
    name: "Drama",
  },
  {
    id: 10751,
    name: "Family",
  },
  {
    id: 14,
    name: "Fantasy",
  },
  {
    id: 36,
    name: "History",
  },
  {
    id: 27,
    name: "Horror",
  },
  {
    id: 10402,
    name: "Music",
  },
  {
    id: 9648,
    name: "Mystery",
  },
  {
    id: 10749,
    name: "Romance",
  },
  {
    id: 878,
    name: "Science Fiction",
  },
  {
    id: 10770,
    name: "TV Movie",
  },
  {
    id: 53,
    name: "Thriller",
  },
  {
    id: 10752,
    name: "War",
  },
  {
    id: 37,
    name: "Western",
  },
];

// Récupération de l'element(div) tags
const tags = document.getElementById("tags");

// Iteration sur le tableau de genre pour les affichers sur la page

function setGenre() {
  tags.innerHTML = "";
  genres.forEach((genre) => {
    const t = document.createElement("div");
    t.classList.add("tag");
    t.id = genre.id;
    t.innerText = genre.name;
    tags.append(t);
  });
}

setGenre();

// Récuperation de l'id du tag quand l'utilisateur click sur le button
document.querySelectorAll(".tag").forEach((item) => {
  item.addEventListener("click", (e) => {
    const select_id = e.target.getAttribute("id");
    searchGenres(select_id);
  });
});

//Fetch de l'api en ajoutant la clé id du genre
function searchGenres(select_id) {
  return fetch(
    `https://api.themoviedb.org/3/discover/movie?${APIKEY}&language=en-US&sort_by=popularity.desc&include_adult=true&include_video=false&page=1&with_genres=${select_id}&with_watch_monetization_types=flatrate`
  ).then((response) => response.json());
}

searchGenres();
