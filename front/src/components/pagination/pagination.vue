<template>
  <div>
    <ul v-if="vpagination" class="pagination">
      <li v-for="vpage in vpagination" class="page-item" :class="{'active': vpage == pagedata.current_page}">
        <a @click.prevent="changePage(vpage)" class="page-link" href="#">{{vpage}}</a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props:['pagedata'],
  data(){
    return {
      current:[]
    }
  },
  computed:{
    vpagination(){
      let ap;
      if (this.pagedata.current_page){
        this.current = this.pagedata.current_page;
        ap=this.pagination(this.pagedata.current_page,this.pagedata.last_page)
        return ap;
      } else {
        return false;
      }

    }
  },
  methods:{
    pagination(currentPage, nrOfPages) {
          var delta = 2,
              range = [],
              rangeWithDots = [],
              l;
          range.push(1);
          if (nrOfPages <= 1){
       	return range;
          }
          for (let i = currentPage - delta; i <= currentPage + delta; i++) {
              if (i < nrOfPages && i > 1) {
                  range.push(i);
              }
          }
          range.push(nrOfPages);

          for (let i of range) {
              if (l) {
                  if (i - l === 2) {
                      rangeWithDots.push(l + 1);
                  } else if (i - l !== 1) {
                      rangeWithDots.push('...');
                  }
              }
              rangeWithDots.push(i);
              l = i;
          }
          return rangeWithDots;
      },
      changePage(pageno){
        if (pageno == this.pagedata.current_page){
          return false;
        } else if (pageno == "...") {
          return false;
        } else {
          this.$emit('paginate',pageno);
        }

      }
  }
}
</script>

<style>
</style>
