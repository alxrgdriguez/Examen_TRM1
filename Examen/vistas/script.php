<script>

    window.onload = buscarCiudad;

    async function buscarCiudad() {
        const response = await (await fetch('https://api.opencagedata.com/geocode/v1/json?q=Vera%2C+Spain&key=6dc3bf46f17a417bae8f09745d97e7dd')).json();
        console.log(response);
    }


</script>
