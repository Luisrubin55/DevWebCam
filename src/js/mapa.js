if (document.querySelector("#mapa")) {
    const lat = 19.430213
    const lng = -99.134718
    const zoom = 16
  const map = L.map("mapa").setView([lat, lng], zoom);

  L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  L.marker([lat, lng])
    .addTo(map)
    .bindPopup(`
        <h2 class="mapa__heading">DevWebcam</h2>
        <p class="mapa__texto">Centro de Convenciones de Cíudad de México</p>
    `)
    .openPopup();
}
