// Sample script.js

let hackerrankElements = [];
let CodingninjasElements = [];
let leetCodeElements = [];
let codeForcesElements = [];
let codeChefElements = [];
let topCoderElements = [];
let atCoderElements = [];

/*const getGoodFormat = (dates) => {
    let d = new Date(dates);
    let day = d.getDate();
    let month = d.getMonth() + 1;
    let year = d.getFullYear();
    let hours = d.getHours();
    let minutes = d.getMinutes();
    let am_pm = hours >= 12 ? "PM" : "AM";
    hours = hours % 12;
    hours = hours ? hours : 12; // handle midnight
    minutes = minutes < 10 ? '0' + minutes : minutes;
    let good_format =
        month +
        "/" +
        day +
        "/" +
        year +
        " " +
        hours +
        ":" +
        minutes +
        " " +
        am_pm;
    return good_format;
};
const getGoodFormat = (dates) => {
    // Parsing the date and time from the API response
    const [datePart, timePart] = dates.split(' ');
    const [day, month, year] = datePart.split('.');
    const [hours, minutes] = timePart.split(':');

    // Formatting the date and time
    const good_format = `${month}/${day}/${year} ${hours}:${minutes}`;

    return good_format;
};*/

const getGoodFormat = (datetime) => {
    if (!datetime) {
        console.error('Datetime is undefined or null');
        return '';
    }

    // Splitting the datetime string into its components
    const parts = datetime.split(' ');

    // Check if the parts array has the expected length
    if (parts.length !== 3) {
        console.error('Invalid datetime format:', datetime);
        return '';
    }

    // Extracting day, month, and time
    const [dayAndMonth, day, timeString] = parts;
    const [dayOfMonth, month, dayOfWeek] = dayAndMonth.split('.');

    // Check if day, month, and timeString are defined
    if (!dayOfMonth || !month || !day || !timeString) {
        console.error('Incomplete datetime format:', datetime);
        return '';
    }

    // Formatting the date and time
    const formattedDate = `${month}/${dayOfMonth.padStart(2, '0')}`;
    const formattedDateTime = `${formattedDate} ${timeString}`;

    console.log('Formatted Date Time:', formattedDateTime); // Log the formatted date and time

    return formattedDateTime;
};










const getData = () => {
   // url = "https://clist.by/api/v4/contest/?username=rajapasupuleti11&api_key=02319782edce369b4efbc9fac15b187348d30603&format=json&format_time=true&start__lte=2024-03-30T12:00:00&end__gte=2024-03-27T12:00:00&end__lte=2024-12-27T12:00:00&order_by=start";
    url = "https://clist.by/api/v4/contest/?username=rajapasupuleti11&api_key=02319782edce369b4efbc9fac15b187348d30603&format=json&upcoming=true&format_time=true";

    fetch(url) 

        .then((res) => {   
            return res.json();
        })
        .then((data) => {
            let contests = data.objects;

            contests.forEach(contest => {
                if (contest.resource === "topcoder.com") hackerrankElements.push(contest);
                else if (contest.resource === "codingninjas.com/codestudio") CodingninjasElements.push(contest);
                else if (contest.resource === "leetcode.com") leetCodeElements.push(contest);
                else if (contest.resource === "codeforces.com") codeForcesElements.push(contest);
                else if (contest.resource === "codechef.com") codeChefElements.push(contest);
                else if (contest.resource === "atcoder.jp") atCoderElements.push(contest);
            });

            displayContests();
        })
        .catch((error) => {
            console.error('Error fetching data:', error);
        });
};

const displayContests = () => {
    displayContestElements(hackerrankElements, "#hackerRankBox");
    displayContestElements(CodingninjasElements, "#CodingninjasBox");
    displayContestElements(leetCodeElements, "#leetCodeBox");
    displayContestElements(codeForcesElements, "#codeForcesBox");
    displayContestElements(codeChefElements, "#codeChefBox");
    displayContestElements(atCoderElements, "#atCoderBox");
};

const displayContestElements = (elements, containerId) => {
    const container = document.querySelector(containerId);
    elements.forEach((contest, index) => {
        const element = document.createElement("div");
        element.classList.add("contest");

        const title = document.createElement("h3");
        title.textContent = `${index + 1}) ${contest.event}`;

        const host = document.createElement("p");
        host.textContent = `Hosted by: ${contest.host}`;

        const duration = document.createElement("p");
        duration.textContent = `Duration: ${contest.duration}`;

        const timing = document.createElement("p");
        timing.textContent = `Start: ${getGoodFormat(contest.start)} - End: ${getGoodFormat(contest.end)}`;

        const link = document.createElement("a");
        link.href = contest.href;
        link.textContent = "Contest Link";
        link.target = "_blank";

        element.appendChild(title);
        element.appendChild(host);
        element.appendChild(duration);
        element.appendChild(timing);
        element.appendChild(link);

        container.appendChild(element);
    });
};


getData();
