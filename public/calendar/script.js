document.addEventListener('DOMContentLoaded', function() {
    const datesContainer = document.getElementById('dates');
    const monthYearDisplay = document.getElementById('monthYear');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');
    const timeSelect = document.getElementById('timeSelect');
    const selectButton = document.querySelector('.select-button');

    let currentDate = new Date();
    let selectedDate = null;
    let selectedTime = timeSelect.value;

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        monthYearDisplay.textContent = `${currentDate.toLocaleString('default', { month: 'long' })} ${year}`;
        datesContainer.innerHTML = '';

        for (let i = 0; i < firstDay; i++) {
            datesContainer.innerHTML += `<div></div>`;
        }

        for (let date = 1; date <= lastDate; date++) {
            const dateButton = document.createElement('button');
            dateButton.textContent = date;
            dateButton.addEventListener('click', () => {
                if (selectedDate) {
                    selectedDate.classList.remove('selected');
                }
                selectedDate = dateButton;
                dateButton.classList.add('selected');
            });
            datesContainer.appendChild(dateButton);
        }
    }

    prevMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    nextMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    timeSelect.addEventListener('change', (e) => {
        selectedTime = e.target.value;
    });

    selectButton.addEventListener('click', () => {
        if (selectedDate) {
            const selectedDateValue = `${selectedDate.textContent} ${currentDate.toLocaleString('default', { month: 'long' })} ${currentDate.getFullYear()}`;
            console.log(`Selected Date: ${selectedDateValue}`);
            console.log(`Selected Time: ${selectedTime}`);
            // Here you can add your logic to save the selected date and time
        } else {
            alert('Please select a date.');
        }
    });

    renderCalendar();
});
