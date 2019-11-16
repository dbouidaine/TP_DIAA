<template>
  <div>
    <mdb-btn outline="elegant" @click.native="modal = true"  class="btn">Consulter</mdb-btn>
    <mdb-modal size="lg" :show="modal" @close="modal = false">
        <mdb-modal-header>
            <mdb-modal-title>Modal title</mdb-modal-title>
        </mdb-modal-header>
        <mdb-modal-body>
            <div>
                <mdb-tbl responsive>
                    <mdb-tbl-head>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Date De Naissance</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Groupe</th>
                            <th>Abscences</th>
                            <th>Moyennes</th>
                        </tr>
                    </mdb-tbl-head>
                    <mdb-tbl-body>
                        <tr>
                            <th>Diaeddin</th>
                            <td>Diaeddin</td>
                            <td>Diaeddin</td>
                            <td>Diaeddin</td>
                            <td>Diaeddin</td>
                            <td>Diaeddin</td>
                            <td>Diaeddin</td>
                            <td>Diaeddin</td>
                        </tr>
                    </mdb-tbl-body>
                </mdb-tbl>
            </div>
        </mdb-modal-body>
        <mdb-modal-footer>
            <mdb-btn color="danger" size="sm" @click.native="modal = false">Close</mdb-btn>
        </mdb-modal-footer>
    </mdb-modal>
  </div>
</template>
<script>
  import { mdbTbl,mdbTblHead,mdbTblBody,mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbModalFooter, mdbBtn } from 'mdbvue';
  export default {
    name:'modalTable' , 
    components: {
      mdbModal,
      mdbModalHeader,
      mdbModalTitle,
      mdbModalBody,
      mdbModalFooter,
      mdbBtn,
      mdbTbl,
      mdbTblHead,
      mdbTblBody
    },
    data() {
      return {
        modal: false
      };
    }
  };
</script>            