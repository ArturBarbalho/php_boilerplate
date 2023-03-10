//about
const { createApp } = Vue
createApp({
    data() {
      return {
        count: 0
      }
    },
    methods: {
        startCount(){
            this.count = this.count + 1
        }
    }
  }).mount('#countDiv')