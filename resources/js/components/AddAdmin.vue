<template>
  <mdb-row>
    <mdb-col md="12" class="pb-2">
      <mdb-card class="elegant-text grey lighten-4">
        <form method="POST" v-bind:action="form.url">
         
        <mdb-card-header class="pt-4 white">
          <mdb-card-title><strong>Ajouter Administratif </strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col class="col-12 col-md-6">
              <mdb-input name="name" label="Full Name" far icon="edit" required/>
              <mdb-input  name="adress" label="Adress" far icon="map" required/>
              <mdb-input name="login" label="Username" far icon="user" required/>
            </mdb-col>
            <mdb-col class="col-12 col-md-6">
              <mdb-input  name="birthday" label="Birthday" type="date" far icon="calendar-alt" required/>
              <mdb-input   name="email" label="E-Mail" type="email" far icon="envelope" required/>
              <mdb-input  name="password" label="Password" type="password" far icon="keyboard" required/>
             
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex white justify-content-end">
          <mdb-btn type="submit" icon="user-plus">Ajouter</mdb-btn>
        </mdb-card-footer>
        </form>
      </mdb-card>
      
    </mdb-col>
  </mdb-row>
</template>
<script>
import axios from "axios";
  import { mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody } from 'mdbvue';
  export default {
    name: 'FormsPage',
    props:['url','csrf_token','errors'],
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
        form : 
        {
        
          url : this.url}
      };}
    }; 
</script>