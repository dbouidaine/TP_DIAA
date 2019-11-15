<template>
  <mdb-row>
    <mdb-col md="12" class="pb-2">
      <mdb-card class="elegant-text grey lighten-4">
        <mdb-card-header class="pt-4 white">
          <mdb-card-title><strong>Ajouter Administratif</strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col class="col-12 col-md-6">
              <mdb-input v-model="feilds.name" label="Full Name" far icon="edit"/>
              <mdb-input v-model="feilds.adress" label="Adress" far icon="map"/>
              <mdb-input v-model="feilds.username" label="Username" far icon="user"/>
            </mdb-col>
            <mdb-col class="col-12 col-md-6">
              <mdb-input v-model="feilds.birthday" label="Birthday" type="date" far icon="calendar-alt"/>
              <mdb-input v-model="feilds.email" label="E-Mail" type="email" far icon="envelope"/>
              <mdb-input v-model="feilds.password" label="Password" type="password" far icon="keyboard"/>
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex white justify-content-end">
          <mdb-btn outline="elegant" v-on:click="submitForm" icon="user-plus">Ajouter</mdb-btn>
        </mdb-card-footer>
      </mdb-card>
    </mdb-col>
  </mdb-row>
</template>
<script>
import axios from "axios";
  import { mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody } from 'mdbvue';

  export default {
    name: 'FormsPage',
    components: {
      mdbRow,
      mdbCol,
      mdbInput,
      mdbTextarea,
      mdbBtn,
      mdbCard,
      mdbCardBody,
      mdbCardHeader,
      mdbCardFooter,
      mdbCardTitle
    },
    data() {
      return {
        feilds : 
        {
          name:'',
          adress:'', 
          email:'',
          username:'',
          birthday:'',
          password:''

        }
      };}
      ,methods : 
      {
       submitForm(event) {
       var req=new XMLHttpRequest(); 
       
      }
      }
    }; 
</script>