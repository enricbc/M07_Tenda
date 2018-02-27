$(function () {
  /*
  # Twitter Bootstrap
  --------------------------------------------------------------------------- */
  /*
  ## Tooltips
  --------------------------------------------------------------------------- */
  $('[data-toggle="tooltip"]').tooltip()


  /*
  # Editor de text
  --------------------------------------------------------------------------- */
  /*
  ## Summernote
  --------------------------------------------------------------------------- */
  $('textarea#summernote').summernote({
    placeholder: 'Descriu el producte',
    tabsize: 2,
    height: 350,
    lang: 'ca-ES',
    codemirror: { // codemirror options
  theme: 'paper'
}
  });

});
