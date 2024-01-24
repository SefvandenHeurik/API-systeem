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
    const { name } = data;
    const { icon, description } = data.weather[0];
    const { temp, humidity } = data.main;
    const { speed } = data.wind;

    // Afronden van de temperatuur
    const roundedTemp = Math.round(temp);

    // Weergavelogica
    document.querySelector(".city").innerText = "Het weer in " + name;
    document.querySelector(".icon").src =
      "https://openweathermap.org/img/wn/" + icon + ".png";
    document.querySelector(".description").innerText = description;
    document.querySelector(".temp").innerText = roundedTemp + "°C";
    document.querySelector(".Luchtvochtigheid").innerText =
      "Luchtvochtigheid: " + humidity + "%";
    document.querySelector(".wind").innerText =
      "Windsnelheid: " + speed + " km/h";
    document.querySelector(".weather").classList.remove("loading");

    // Verwijder achtergrondafbeelding bij het tonen van weergegevens
    document.body.style.backgroundImage = "none";
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
