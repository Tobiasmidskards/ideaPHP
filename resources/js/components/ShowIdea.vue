<template>

    <div>
          <div class="card">
            <div class="card-header">
              <h5><a v-bind:href="'./idea/' + idea.id">{{idea.title}}</a></h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <p>{{idea.body}}</p>
                <small>Oprettet: {{idea.created_at}}</small>
                </li>
            </ul>
          </div>
          <br>
    </div>
    

</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      status:''
    }
  },

  // Fetches posts when the component is created.
  created: function() {
    this.loadIdea();
  },

  methods: {
    loadIdea: function() {
      this.status = 'Loading..';
      var vm = this;
      axios.get('/ideaPHP/public/api/idea/1')
      .then((response)=>{
        vm.status = response.data;

      })
      .catch(function (error){
        vm.status = 'An error occoured.' + error;
      });
    }
  }
  
}
</script>