const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      products: []
    }
  },

  methods : {
    axiosCall() {
        //chiamata axios get
        axios.get('./db.php')
            .then((res) => {
                this.products = res.data
                console.log(this.products);
            })
    }
  },

  mounted() {
    this.axiosCall()
  }
}).mount('#app')