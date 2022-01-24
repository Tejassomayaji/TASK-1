<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of users</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr v-for="user in users">
                            <td>user.id</td>
                            <td>user.name</td>
                            <td>user.email</td>
                          </tr>
                          getUsers() {

     axios.get('/users')
      .then((response) => this.users = response.data)
      .catch((error) => console.log(error.message))

  }
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

