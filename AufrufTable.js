const d = new Date();
let day = d.getDay() - 1
x = 0;

const URL = ['https://www.hardtberg-gymnasium.de/index.php?option=com_content&view=article&id=1045', 'https://www.hardtberg-gymnasium.de/index.php?option=com_content&view=article&id=1046', 'https://www.hardtberg-gymnasium.de/index.php?option=com_content&view=article&id=1047', 'donnerstag', 'freitag']
if (day >= 0 && day <= 2) {
    setInterval(function () {
        x++;
        if (x < 2) {
            window.open(URL[day], 'display');

        } else {
            if (x < 3) { window.open(URL[day + 1], 'display'); } else {
                if (x < 4) { window.open(URL[day + 2], 'display'); } else {
                    x = 0;
                }
            }
        }
    }, 20000)
}
if (day == 3) {
    setInterval(function () {
        x++;
        if (x < 2) {
            window.open(URL[3], 'display');
        } else {
            if (x < 3) {
                window.open(URL[4], 'display');

            } else {
                if (x < 4) {
                    window.open(URL[0], 'display');
                } else {
                    x = 0;
                }
            }
        }
    }, 20000)
}
if (day == 4) {
    setInterval(function () {
        x++;
        if (x < 2) {
            window.open(URL[4], 'display');
        } else {
            if (x < 3) {
                window.open(URL[0], 'display');
            } else {
                if (x < 4) {
                    window.open(URL[1], 'display');
                } else {
                    x = 0;
                }
            }
        }
    }, 20000)
}