const app = new Vue({
    el:'#app',
    data:{
      disc:[],
      prova: "ciao"
  
    },
    created(){
      axios.get('http://localhost:8888/php-ajax-dischi/data/db.php')
      .then(res => {
        this.disc=res.data;
        console.log(this.disc);
      })
      .catch(err => {
        console.error('errore'); 
      })
    },
    methods:{
  
    }
  })