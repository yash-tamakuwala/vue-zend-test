<template>
  <div class="col-sm-12">
    <div class="form card-body">
      <form @submit.prevent="handleSubmit">
        <label for="name" class="col-form-label">Search Movie Title</label>

        <div class="input-group-text">
          <input v-model.trim="name" type="text" required="required" class="form-control field" id="name">
        </div>

        <div class="form-row">
          <div class="col-5 p-4">
            <label for="title">Genre</label>
            <v-select v-model="genre" :options="genreOptions" label="genre" class="select"/>
          </div>
          <div class="col-5 p-4">
            <label for="language">Language</label>
            <v-select v-model="language" :options="languageOptions" label="language" class="select"/>
          </div>
        </div>
      </form>
    </div>

    <div class="col-sm-12 row">
      <div class="col-sm-6 p-2">
        <h4>Search history</h4>
        <div class="col-auto">
          <table v-if="movies.length" class="table">
            <thead>
            <tr>
              <th v-for="column in tableColumns">
                {{ column.title }}
              </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="movie in movies">
              <td v-for="column in tableColumns">
                {{ getField(movie, column.field) }}
              </td>
            </tr>
            </tbody>
          </table>
          <span v-else>-</span>
        </div>
      </div>
      <div class="col-sm-6 p-2">
        <h4>All Movies</h4>
        <div class="col-auto">
          <table v-if="allMovies.length" class="table">
            <thead>
            <tr>
              <th v-for="column in tableColumns">
                {{ column.title }}
              </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="movie in allMovies">
              <td v-for="column in tableColumns">
                {{ getField(movie, column.field) }}
              </td>
            </tr>
            </tbody>
          </table>
          <span v-else>-</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Vue from 'vue';
import _ from 'lodash'
import vSelect from 'vue-select';

export default Vue.extend({
  data: function () {
    return {
      name: '',
      genre: '',
      language: '',
      genreOptions: [],
      languageOptions: [],
      movies: [],
      allMovies: [],
      tableColumns: [{
        title: 'Title',
        field: 'name'
      }, {
        title: 'Genre',
        field: 'genre'
      }, {
        title: 'Language',
        field: 'language'
      }]
    }
  },
  components: {
    vSelect,
  },
  watch: {
    name: function () {
      this.debouncedSearch();
    },
    genre: function () {
      this.debouncedSearch();
    },
    language: function () {
      this.debouncedSearch();
    }
  },
  created: function () {
    this.debouncedSearch = _.debounce(this.searchMovies, 500);
    this.searchMovies(true);
  },
  methods: {
    async searchMovies(searchAll = false) {
      const response = await fetch(
          '/search',
          {
            method: 'POST',
            body: JSON.stringify({
              name: searchAll ? '' : this.name,
              language: searchAll ? '' : this.language,
              genre: searchAll ? '' : this.genre
            }),
            headers: {
              'Content-type': 'application/json',
            },
          }
      );

      const responseData = await response.json();

      if (searchAll) {
        this.allMovies = responseData.movies;
      } else {
        this.movies = responseData.movies;
      }

      this.genreOptions = responseData.genres;
      this.languageOptions = responseData.languages;
    },
    getField: function (object, field) {
      return _.at(object, field).join(', ');
    }
  }
});
</script>
