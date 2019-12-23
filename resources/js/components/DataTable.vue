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
                    <td>{{student.nom}}</td>
                    <td><modal-table v-bind:std="student"></modal-table></td>
                    <td><mdb-btn tag="a" v-on:click="supp(student.id)" v-bind="student" role="button" color="danger" class="btn m-0"> Supprimer</mdb-btn></td>
                </tr>
            </mdb-tbl-body>
        </mdb-tbl>
    </div>
</template>
<script>
    import { mdbBtn,mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';
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

            supp(id)
            {
                window.location.href = "http://localhost/TP_IGL_ABL/public/etudiantt/" + id.toString();
            }

        }
    }
</script>
