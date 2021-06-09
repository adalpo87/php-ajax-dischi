const app = new Vue({
    el:'#app',
    data:{
      disc:[],
      genres:[],
      genreToSearch: 'all',
    },

    methods:{

      getApi(){
        axios.get('http://localhost:8888/php-ajax-dischi/api.php',{
          params:{
            genre: this.genreToSearch
          }
        })
      .then(res => {
        this.disc=res.data.disc;
        this.genres=res.data.genres;
        console.log(this.disc);
      })
      .catch(err => {
        console.error('errore'); 
      })
      }
    },

    created(){
      this.getApi();
    },
  })