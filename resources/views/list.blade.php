<h1> Users List</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
</tr>
@foreach($users as $user)
<tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
</tr>
@endforeach

<table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in users" :key="user.id">
              <td>{{user.id}}</td>
              <td>{{user.name}}</td>
              <td>{{user.email}}</td>
            </tr>
          </tbody>
        </table>
        <script>
export default {

    data: function () {
        return {
          users: []
        }
    },
mounted(){
    fetch()
}
    methods: {

      getUsers: function() {

        var app = this;

         axios.get('/users')
            .then(function (response) {
            app.users = response.data;
        })
        .catch(function (error) {
            console.log(error.message);
        });

      }

    },

    created() {
      this.getUsers();
    },
    getUsers() {

axios.get('/users')
 .then((response) => this.users = response.data)
 .catch((error) => console.log(error.message))

}