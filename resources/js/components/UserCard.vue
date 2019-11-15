<template>
	<mdb-card>
		<mdb-view hover>
			<a href="#!">
				<mdb-card-image
					src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg"
					alt="Card image cap"/>
				<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
			</a>
		</mdb-view>
		<mdb-card-body class="text-center">
			<mdb-card-title>Diaeddin BOUIDAINE</mdb-card-title>
			<mdb-card-text>Directeur de departement d'Ingénieurie</mdb-card-text>
			<mdb-btn color="elegant" disabled>View Profile</mdb-btn>
		</mdb-card-body>
	</mdb-card>
</template>
<script>
	import { mdbCard, mdbCardImage, mdbCardBody, mdbCardTitle, mdbCardText, mdbBtn, mdbView, mdbMask } from 'mdbvue';
	export default {
		name: 'CardPage',
		components: {
			mdbCard,
			mdbCardImage,
			mdbCardBody,
			mdbCardTitle,
			mdbCardText,
			mdbBtn,
			mdbView,
			mdbMask
		}
	}
</script>