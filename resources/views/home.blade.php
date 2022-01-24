@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </div>
            </div>
    </div>
</div>
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
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="user in users">
                            <td>user.name</td>
                            <td>user.lastaname</td>
                            <td>user.email</td>
                          </tr>
                      </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {

    data: function () {
        return {
          users: []
        }
    },

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

    }
    getUsers() {

axios.get('/users')
 .then((response) => this.users = response.data)
 .catch((error) => console.log(error.message))

}

@endsection
