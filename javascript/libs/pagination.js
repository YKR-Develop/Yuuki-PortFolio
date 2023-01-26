jQuery(document).ready(function($){
  $('.blog-list').paginathing({
      perPage: 6,
      firstLast: false,
      prevText:'Prev' ,
      nextText:'Next' ,
      activeClass: 'active',
  })
});