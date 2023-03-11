//about
const { createApp } = Vue
    createApp({
        data() {
          return {
            count: 0
          }
        },
        methods: {
            startCount(idem){
                this.count = this.count + 1
                console.log(idem)
            }
        }
      }).mount('#countDiv')

  