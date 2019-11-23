<template>
  <div>
    <div style="display: none">{{ rang=1 }}</div>
    <h2><strong>La liste des étudiants : </strong></h2>
    <br>
    <mdb-tbl responsive btn striped bordered>
      <mdb-tbl-head>

         <tr>
            <th>#</th>
            <th>Nom</th>
            <th></th>
            <th></th>

          </tr>
          </mdb-tbl-head>
          <mdb-tbl-body id="myTable">
            <tr v-for="(student, index) in students" :key="student.matricule" class="text-center">
              <td>{{ rang++ }}</td>
              <td>{{student.nom}} </td>
              <td><modal-table v-bind:std="student"/></td>
              <!--td><mdb-btn tag="a" v-on:click="deleteStudent(student.id,index)" v-bind="student" role="button" color="danger"  class="btn m-0"> Supprimer</mdb-btn></td-->
                <td><mdb-btn tag="a" role="button" color="danger"  class="btn m-0"> Supprimer</mdb-btn></td>
            </tr>
          </mdb-tbl-body>
        </mdb-tbl>
  </div>
</template>
<script>
  import { mdbBtn,mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';
  import { modalTable  } from './ModalTable';
  import axios from "axios";
  export default {
    name: 'TablePage',
    props: {etudiants : {type:Array,},url : {type:String}},
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody,
      mdbBtn
    },
    data()
    {
      return {
        students:this.etudiants,
      };
    }, methods : {
     /*supp(id) {

       var url =this._url+"/"+id;
        console.log(url);
           axios.get(url)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {

                });
     }*/
            deleteStudent(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/etudiantt/' + id)
                        .then(function (response) {
                            app.students.splice(index, 1);
                        })
                        .catch(function (response) {
                            alert("Could not delete Student");
                        });
                }
            }
    }
  }
</script>
