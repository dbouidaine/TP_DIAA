<template>
	<mdb-card>
		<mdb-view hover>
			<a href="">
                <div style="height:200px;">
                    <mdb-card-image
                        src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
					      alt="Card image cap"/>
				<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
        </div>

			</a>
		</mdb-view>
		<mdb-card-body>
			<mdb-card-title class="text-center">Sign In</mdb-card-title>
			<form>
                <div class="grey-text">
                <mdb-input label="Your email" icon="envelope" type="email"/>
                <mdb-input label="Your password" icon="lock" type="password"/>
                </div>
                <div class="text-center align-content-center">
                <mdb-btn tag="a" role="button" v-bind:href="url_webmaster">Web Master</mdb-btn>
                <mdb-btn tag="a" role="button" v-bind:href="url_admin">Administrateur</mdb-btn>
                </div>
            </form>
		</mdb-card-body>
	</mdb-card>
</template>

<script>
  import { mdbCard, mdbCardImage, mdbCardBody, mdbCardTitle, mdbCardText ,mdbView, mdbMask, mdbInput, mdbBtn } from 'mdbvue';
  export default {
    name: 'Basic',
    props: ['url_webmaster','url_admin'],
    components: {
        mdbCard,
		mdbCardImage,
		mdbCardBody,
		mdbCardTitle,
		mdbCardText,
		mdbView,
		mdbMask,
        mdbInput,
        mdbBtn
    }
  }
</script>
