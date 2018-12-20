
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');

        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    var body = $("html, body");

    function check04($input) {
        if (!(parseInt($input.value) <= 4 && parseInt($input.value) >= 0) && !($input.value=="")) {
    $input.value="";
}
    }
$changed = false;
    $('table').keydown(function(e){
        var $table = $(this);
        var $active = $('input:focus,select:focus',$table);
        $next = null;
        var focusableQuery = 'input:visible';
        var position = parseInt( $active.closest('td').index()) + 1;
        $key=e.keyCode;
        switch(e.keyCode){

            case 38: // <Up>
                $next = $active
                    .closest('tr')
                    .prev()
                    .find('td:nth-child(' + position + ')')
                    .find(focusableQuery)
                ;

                break;

            case 40: // <Down>
                $next = $active
                    .closest('tr')
                    .next()
                    .find('td:nth-child(' + position + ')')
                    .find(focusableQuery)
                ;
                break;
        }

        if($next && $next.length)
        {
            $next.focus();
            $changed = true;
        }
    });

    $('table').keyup(function() {
        var $table = $(this);
        var $next = null;
        var $active = $('input:focus', $table);
        var focusableQuery = 'input:visible';
        var position = parseInt( $active.closest('td').index()) + 1;
        var $test = $(':focus')[0];
        $active.closest('tr').find('td:eq(3)').html("<div class='circle-"+$active.val()+"'/>");

        if ($test.value.length == $test.maxLength && $key!=38 && !($changed)) {
            $next = $active
                .closest('tr')
                .next()
                .find('td:nth-child(3)')
                .find(focusableQuery)
            ;
            $next.focus();



        }
        $changed = false;

    });

var $loaded = false;

    $('ul.setup-panel li.active a').trigger('click');

    function loadtable(c){


        console.log(c);
        $('#tablecomrecap').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&recap=true",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
        });

        $('#tablecom1-1').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=1-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });

        $('#tablecom1-2').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=1-2",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom1-3').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=1-3",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom1-4').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=1-4",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom2-1').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=2-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom3-1').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=3-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom4-1').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=4-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom5-1').DataTable({
            "ajax": "/eleve/elevelist.php?classe="+c+"&com=5-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });


    };
    function loadedittable(d){


        console.log(d);
        $('#tablecomrecap').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&recap=true",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
        });

        $('#tablecom1-1').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=1-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });

        $('#tablecom1-2').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=1-2",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom1-3').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=1-3",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom1-4').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=1-4",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom2-1').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=2-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom3-1').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=3-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom4-1').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=4-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });
        $('#tablecom5-1').DataTable({
            "ajax": "/eleve/elevelist.php?d="+d+"&com=5-1",
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [1],
                    "width": "1%"
                }
                ,
                {
                    "targets": [2],
                    "width": "1%"
                }
            ]
        });


    };
    function changerecap(c)
    {
        $('#'+c.getAttribute("name")).html("<div class='circle-"+c.value+"'></div>");
        console.log('#'+c.getAttribute("name"));
    };
    $('#activate-com1-1').on('click', function(e) {
      if ($("#classchoose").val()==null || $("#matierechoose").val()==null || $("#inputdevoir").val()=="")
      {
        alert("Veuillez remplir les cases obligatoires");
      }
      else {
        if(!$loaded)
        {

        $loaded = true;
        }
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li').removeClass('disabled');
            $('ul.setup-panel li a[href="#com1-1"]').trigger('click');

        });
        setTimeout(function(){
            $(".inputs")['0'].focus();
        }, 500);
        loadtable($("#classchoose").val());

      }


    })
    $('#activate-com1-2').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {

            $('ul.setup-panel li a[href="#com1-2"]').trigger('click');
        });


    })
    $('#activate-com1-3').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com1-3"]').trigger('click');
        });


    })
    $('#activate-com1-4').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com1-4"]').trigger('click');
        });


    })
    $('#activate-com2-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com2-1"]').trigger('click');
        });


    })
    $('#activate-com3-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com3-1"]').trigger('click');
        });
    })
    $('#activate-com4-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com4-1"]').trigger('click');
        });

    })
    $('#activate-com5-1').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#com5-1"]').trigger('click');
        });
    })
    $('#activate-verify').on('click', function(e) {
        body.stop().animate({scrollTop:0}, '500', 'swing', function() {
            $('ul.setup-panel li a[href="#verify"]').trigger('click');
        });

    })
