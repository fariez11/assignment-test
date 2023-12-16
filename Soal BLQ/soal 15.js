function convertTo24HourFormat(time) {
    var AM = time.match(/AM/i);
    var PM = time.match(/PM/i);

    time = time.replace(/AM|PM/gi, "");

    var timeArray = time.split(":");

    if (AM) {
        if (timeArray[0] === "12") {
            timeArray[0] = "00";
        }
    }

    if (PM) {
        if (timeArray[0] !== "12") {
            timeArray[0] = parseInt(timeArray[0]) + 12;
        }
    }

    return timeArray.join(":");
    }

    console.log(convertTo24HourFormat("03:40:44 PM"));