<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Screen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .calendar-box {
            width: 200px;
            height: 200px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            position: relative;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            font-size: 18px;
            padding: 10px;
        }
        .calendar-box .day-number {
            font-size: 16px;
            font-weight: bold;
        }
        .calendar-box.sunday {
            color: red;
        }
        .calendar-header {
            font-weight: bold;
            text-align: center;
            padding: 10px;
        }
        .calendar-navigation {
            margin-bottom: 10px;
            margin-top: 10px;
            text-align: center;
        }

        .calendar-header {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    font-weight: bold;
}

#calendarGrid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-auto-rows: minmax(80px, auto);
}

.calendar-box {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    border: 1px solid #ccc;
}

.sunday {
    color: red;
}


        @media (max-width: 768px) {
            .calendar-box {
                width: 90px;
                height: 90px;
            }
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-light bg-white border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <div class="d-flex align-items-center">
            <span class="me-3">(+4) 0752 220 222</span>
            <div class="dropdown">
                <a class="dropdown-toggle text-dark text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i> enkosoft company
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Transferuri</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <!-- New Reservation -->
    <div class="card mb-4">
        <div class="card-header">Rezervare noua</div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="fromLocation" class="form-label">De la</label>
                    <select id="fromLocation" class="form-select">
                        <option selected>-- alege --</option>
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="toLocation" class="form-label">La</label>
                    <select id="toLocation" class="form-select">
                        <option selected>-- alege --</option>
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                    </select>
                </div>
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-warning">Cauta</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Search Reservation -->
    <div class="card mb-4">
        <div class="card-header">Cauta o rezervare</div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-2">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" placeholder="Id">
                </div>
                <div class="col-md-3">
                    <label for="fromLocationSearch" class="form-label">Locatie plecare</label>
                    <select id="fromLocationSearch" class="form-select">
                        <option selected>oricare</option>
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="flightNumber" class="form-label">Numar zbor</label>
                    <input type="text" class="form-control" id="flightNumber" placeholder="Numar zbor">
                </div>
                <div class="col-md-3">
                    <label for="toLocationSearch" class="form-label">Locatie destinatie</label>
                    <select id="toLocationSearch" class="form-select">
                        <option selected>oricare</option>
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="fromDate" class="form-label">De la data</label>
                    <input type="date" class="form-control" id="fromDate">
                </div>
                <div class="col-md-3">
                    <label for="toDate" class="form-label">Pana la data</label>
                    <input type="date" class="form-control" id="toDate">
                </div>
                <div class="col-md-2">
                    <label for="clientName" class="form-label">Nume Client</label>
                    <input type="text" class="form-control" id="clientName" placeholder="Nume Client">
                </div>
                <div class="col-md-2">
                    <label for="phone" class="form-label">Telefon</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Telefon">
                </div>
                <div class="col-md-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-md-2">
                    <label for="transferStatus" class="form-label">Status transfer</label>
                    <select id="transferStatus" class="form-select">
                        <option selected>oricare</option>
                        <option value="1">Completed</option>
                        <option value="2">Pending</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="paymentStatus" class="form-label">Status plata</label>
                    <select id="paymentStatus" class="form-select">
                        <option selected>oricare</option>
                        <option value="1">Paid</option>
                        <option value="2">Unpaid</option>
                    </select>
                </div>
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-warning">Cautare</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Calendar -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Calendar lunar</h5>
                <div class="calendar-navigation">
                    <button id="prevMonth" class="btn btn-warning btn-sm">Prev</button>
                    <span id="currentMonth" class="mx-3"></span>
                    <button id="nextMonth" class="btn btn-warning btn-sm">Next</button>
                </div>
            </div>
            <div class="card-body">
                <!-- Header -->
                <div class="row calendar-header">
                    <div class="col text-center" style="color: red;">Duminica</div>
                    <div class="col text-center">Luni</div>
                    <div class="col text-center">Marti</div>
                    <div class="col text-center">Miercuri</div>
                    <div class="col text-center">Joi</div>
                    <div class="col text-center">Vineri</div>
                    <div class="col text-center" style="color: red;">Sambata</div>
                </div>

                <!-- Grid -->
                <div class="d-flex flex-wrap justify-content-start" id="calendarGrid"></div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

<script>
    const calendarGrid = document.getElementById('calendarGrid');
    const currentMonthDisplay = document.getElementById('currentMonth');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');

    let currentDate = new Date();

    function renderCalendar(date) {
        const year = date.getFullYear();
        const month = date.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        currentMonthDisplay.textContent = date.toLocaleString('default', { month: 'long', year: 'numeric' });

        calendarGrid.innerHTML = '';

        for (let i = 0; i < firstDay; i++) {
            const emptyBox = document.createElement('div');
            emptyBox.className = 'calendar-box';
            calendarGrid.appendChild(emptyBox);
        }

        for (let day = 1; day <= lastDate; day++) {
            const dayBox = document.createElement('div');
            dayBox.className = 'calendar-box';
            if ((firstDay + day - 1) % 7 === 0) {
                dayBox.classList.add('sunday');
            }

            const dayNumber = document.createElement('div');
            dayNumber.className = 'day-number';
            dayNumber.textContent = day;
            dayBox.appendChild(dayNumber);

            calendarGrid.appendChild(dayBox);
        }

        const totalBoxes = firstDay + lastDate;
        const emptyBoxesAfter = (7 - (totalBoxes % 7)) % 7;
        for (let i = 0; i < emptyBoxesAfter; i++) {
            const emptyBox = document.createElement('div');
            emptyBox.className = 'calendar-box';
            calendarGrid.appendChild(emptyBox);
        }
    }

    prevMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    });

    nextMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    });

    renderCalendar(currentDate);
</script>

<script>

    //de test statice
const transferData = {
    31: { private: 2, neplatite: 2, anulate: 2 },
    15: { private: 1, neplatite: 0, anulate: 1 },
    10: { private: 3, neplatite: 1, anulate: 0 }
};

function renderCalendar(date) {
    const year = date.getFullYear();
    const month = date.getMonth();
    const firstDay = new Date(year, month, 1).getDay();
    const lastDate = new Date(year, month + 1, 0).getDate();

    currentMonthDisplay.textContent = date.toLocaleString('default', { month: 'long', year: 'numeric' });

    calendarGrid.innerHTML = '';

    for (let i = 0; i < firstDay; i++) {
        const emptyBox = document.createElement('div');
        emptyBox.className = 'calendar-box';
        calendarGrid.appendChild(emptyBox);
    }

    for (let day = 1; day <= lastDate; day++) {
        const dayBox = document.createElement('div');
        dayBox.className = 'calendar-box';

        if ((firstDay + day - 1) % 7 === 0) {
            dayBox.classList.add('sunday');
        }

        const dayNumber = document.createElement('div');
        dayNumber.className = 'day-number';
        dayNumber.innerHTML = `<strong>${day}</strong>`;

        if (transferData[day]) {
            const details = document.createElement('div');
            details.innerHTML = `
                <div>private: ${transferData[day].private}</div>
                <div>neplatite: ${transferData[day].neplatite}</div>
                <div>anulate: ${transferData[day].anulate}</div>
            `;
            dayNumber.appendChild(details);
        }

        dayBox.appendChild(dayNumber);
        calendarGrid.appendChild(dayBox);
    }

    const totalBoxes = firstDay + lastDate;
    const emptyBoxesAfter = (7 - (totalBoxes % 7)) % 7;
    for (let i = 0; i < emptyBoxesAfter; i++) {
        const emptyBox = document.createElement('div');
        emptyBox.className = 'calendar-box';
        calendarGrid.appendChild(emptyBox);
    }
}

</script>

</body>
</html>
