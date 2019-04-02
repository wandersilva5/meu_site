$(document).ready(function() {
    
    //Json events
    $('#calendar').fullCalendar({

        //Alteração do idioma para portugues Brasil
        ignoreTimezone: false,
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        titleFormat: {
            month: 'MMMM yyyy',
            week: "d[ MMMM][ yyyy]{ - d MMMM yyyy}",
            day: 'dddd, d MMMM yyyy'
        },
        columnFormat: {
            month: 'ddd',
            week: 'ddd d',
            day: ''
        },
        axisFormat: 'H:mm',
        timeFormat: {
            '': 'H:mm',
            agenda: 'H:mm{ - H:mm}'
        },
        buttonText: {
            prev: "&nbsp;&#9668;&nbsp;",
            next: "&nbsp;&#9658;&nbsp;",
            prevYear: "&nbsp;&lt;&lt;&nbsp;",
            nextYear: "&nbsp;&gt;&gt;&nbsp;",
            today: "Hoje",
            month: "Mês",
            week: "Semana",
            day: "Dia"
        },
    
        ///
        editable: true,
        
        events: "json-events.php",
        
        eventDrop: function(event, delta) {
            alert(event.title + ' was moved ' + delta + ' days\n' +
                '(should probably update your database)');
        },
        
        loading: function(bool) {
            if (bool) $('#loading').show();
            else $('#loading').hide();
        }
        

    });
    
});