let weather = {
  apiKey: "5c181afadc08ab8fe1475a7f5f8b7734",
  fetchWeather: function (city) {
    fetch(
      "https://api.openweathermap.org/data/2.5/weather?q=" +
        city +
        "&units=metric&lang=nl&appid=" +
        this.apiKey
    )
      .then((response) => {
        if (!response.ok) {
          alert("Geen weer gevonden.");
          throw new Error("Geen weer gevonden.");
        }
        return response.json();
      })
      .then((data) => this.displayWeather(data));
  },
  displayWeather: function (data) {
    const { name } = data;
    const { icon, description } = data.weather[0];
    const { temp, humidity } = data.main;
    const { speed } = data.wind;
    document.querySelector(".city").innerText = "Het weer in " + name;
    document.querySelector(".icon").src =
      "https://openweathermap.org/img/wn/" + icon + ".png";
    document.querySelector(".description").innerText = description;
    document.querySelector(".temp").innerText = temp + "°C";
    document.querySelector(".Luchtvochtigheid").innerText =
      "Luchtvochtigheid: " + humidity + "%";
    document.querySelector(".wind").innerText =
      "Windsnelheid: " + speed + " km/h";
    document.querySelector(".weather").classList.remove("loading");

    // Remove background image when displaying weather information
    document.body.style.backgroundImage = "none";
  },
};

function autoUpdateWeather() {
  console.log("Pagina wordt automatisch bijgewerkt!");
  // Voeg hier je default stad toe of gebruik de huidige stad uit de UI
  const mainCity = "Roermond";
  weather.fetchWeather(mainCity);
}

// Stel de automatische update in op 1 minuut (1 * 60 * 1000 milliseconden)
setInterval(autoUpdateWeather, 1 * 60 * 1000);

// Fetch weer voor de standaardstad bij het laden van de pagina
document.addEventListener("DOMContentLoaded", function () {
  weather.fetchWeather("Roermond");
});


const weatherApp = {
  apiKey: "5c181afadc08ab8fe1475a7f5f8b7734",

  fetchWeather: async function (city) {
    try {
      const response = await fetch(
        `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&lang=nl&appid=${this.apiKey}`
      );

      if (!response.ok) {
        throw new Error("Geen weer gevonden.");
      }

      const data = await response.json();
      this.displayWeather(data);
    } catch (error) {
      console.error(error);
      alert("Geen weer gevonden.");
    }
  },

  displayWeather: function (data) {
    // ... (dezelfde weergavelogica als voorheen)
  },

  autoUpdateWeather: function () {
    console.log("Pagina wordt automatisch bijgewerkt!");
    const mainCity = "Roermond";
    this.fetchWeather(mainCity);
  },
};

document.addEventListener("DOMContentLoaded", function () {
  weatherApp.autoUpdateWeather();
  setInterval(() => weatherApp.autoUpdateWeather(), 1 * 60 * 1000);
});
