let mutations = {
    DELETE_Etudiant(state, post) {
        let index = state.posts.findIndex(item => item.id === post.id)
        state.posts.splice(index, 1)
    }

}
export default mutations