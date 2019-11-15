<template>
  <mdb-container>
    <mdb-row class="mt-4">
      <mdb-card class="text-center">
        <mdb-card-header>
          <mdb-tab default class="card-header-tabs">
            <mdb-tab-item :active="active==0" @click.native.prevent="active=0">Active</mdb-tab-item>
            <mdb-tab-item :active="active==1" @click.native.prevent="active=1">Link</mdb-tab-item>
            <mdb-tab-item disabled>Disabled</mdb-tab-item>
          </mdb-tab>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-tab-content>
            <mdb-tab-pane class="fade" key="show1" v-if="active==0">
              <mdb-card-title>Special title treatment</mdb-card-title>
              <mdb-card-text>With supporting text below as a natural lead-in to additional content.</mdb-card-text>
              <mdb-btn color="primary">go somewhere</mdb-btn>
            </mdb-tab-pane>
            <mdb-tab-pane class="fade" key="show2" v-if="active==1">
              <mdb-card-title>Special title treatment</mdb-card-title>
              <mdb-card-text>With supporting text below as a natural lead-in to additional content.</mdb-card-text>
              <mdb-btn color="primary">go somewhere</mdb-btn>
            </mdb-tab-pane>
            <mdb-tab-pane class="fade" key="show3" v-if="active==2">
              <mdb-card-title>Special title treatment</mdb-card-title>
              <mdb-card-text>With supporting text below as a natural lead-in to additional content.</mdb-card-text>
              <mdb-btn color="primary">go somewhere</mdb-btn>
            </mdb-tab-pane>
          </mdb-tab-content>
        </mdb-card-body>
      </mdb-card>
    </mdb-row>
  </mdb-container>
</template>
<script>
  import { mdbContainer,  mdbRow, mdbCol, mdbBtn, mdbCard, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardBody, mdbCardHeader, mdbListGroup, mdbListGroupItem, mdbNavItem, mdbCardGroup, mdbIcon, mdbFooter, mdbTab, mdbTabItem, mdbTabContent, mdbTabPane } from 'mdbvue';
  export default {
    name: 'tab',
    components: {
      mdbContainer,
      mdbRow,
      mdbCol,
      mdbBtn,
      mdbCard,
      mdbCardTitle,
      mdbCardText,
      mdbCardFooter,
      mdbCardBody,
      mdbCardHeader,
      mdbListGroup,
      mdbListGroupItem,
      mdbNavItem,
      mdbCardGroup,
      mdbIcon,
      mdbFooter,
      mdbTab,
      mdbTabItem,
      mdbTabContent,
      mdbTabPane,
    },
    data(){
      return {
        active: 0
      };
    }
  }
</script>