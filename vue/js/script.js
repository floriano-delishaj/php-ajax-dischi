new Vue({
    el: '#app',
    data: {
      disks: [],
      genreDisks: [],
      selectedGenre: "",
    },
    mounted() {
        axios("http://localhost:80/php/php-ajax-dischi/php/api/diskApi.php").then(
            (res) => {
                this.disks = res.data;
                this.genreDisks = res.data;   
            }
        )
    }
})