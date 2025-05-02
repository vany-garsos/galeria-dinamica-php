
    document.querySelector('.formulario').addEventListener('submit', function(event) {
        const datetimeInput = document.getElementById('hora_salida');
        const datetimeValue = datetimeInput.value;
        if (datetimeValue) {
            const date = new Date(datetimeValue);
            const formattedDate = formatDateTo12Hour(date);
            document.getElementById('hora_salida_12h').value = formattedDate;
        }
    });

    function formatDateTo12Hour(date) {
        const options = {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
        };
        return new Intl.DateTimeFormat('en-US', options).format(date);
    }

