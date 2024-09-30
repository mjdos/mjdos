<template>

      <h1>Lista de Dados</h1>
      <table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Equipamento</th>
          <th>Temperatura</th>
          <th>Umidade</th>
          <th>Luz</th>
          <th>Movimento</th>
          <th>IP</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="dado in dados" :key="dado.id">
          <td>{{ dado.id }}</td>
          <td>{{ dado.n_equipamento }}</td>
          <td>{{ dado.temperatura }}</td>
          <td>{{ dado.umidade }}</td>
          <td>{{ dado.luz ? 'Sim' : 'Não' }}</td>
          <td>{{ dado.movimento ? 'Sim' : 'Não' }}</td>
          <td>{{ dado.ip }}</td>
        </tr>
      </tbody>
    </table>
    
  </template>
  
  <script>
    import axios from 'axios';
    
    export default {
        data() {
            return {
                dados: []  // Array para armazenar os dados recebidos
            };
        },
        mounted() {
            this.fetchDados();  // Chama a função ao montar o componente
        },
        methods: {
            fetchDados() {
                // Faz a requisição GET para o endpoint '/apiDados'
                axios.get('/apiDados')
                    .then(response => {
                        this.dados = response.data;  // Armazena os dados recebidos
                    })
                    .catch(error => {
                        console.error('Erro ao buscar dados:', error);  // Exibe o erro no console
                    });
            }
        }
    };
  </script>