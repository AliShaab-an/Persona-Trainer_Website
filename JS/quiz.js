const questions =[
    {
        question: "What is your gender?",
        answers: [
            {text: "I am Male"},
            {text: "I am Female"},
            {text: "Rather Not Say"}
        ]
    },

    {
        question: "How old are you?",
        answers: [
            {text: "under 20"},
            {text: "20-30"},
            {text: "30-40"},
            {text: "40-50"},
            {text: "50-60"},
            {text: "60+"},
        ]
    },
    {
        question: "Which best describes how you have trained the most to date?",
        answers: [
            {text: "BodyBuilding"},
            {text: "PowerLifting"},
            {text: "PowerBuilding"},
            {text: "CrossFit"},
            {text: "None Of the above"},
        ]
    },
    {
        question: "How long can your training sessions be?",
        answers: [
            {text: "Less than an hour"},
            {text: "An hour or more"},
        ]
    },
    {
        question: "What best matches your primary goal?",
        answers: [
            {text: "I mostly want to build muscle.Gaining strength would be great too but it isn't my main goal."},
            {text: "I mostly want to gain strength.Building muscle would be great too but it isn't my main goal."},
            {text: "I want to build an even combination of muscle and strength."},
            {text: "I mostly want to lose fat,but i also need to build muscle to create my best physique "},
        ]
    },
    {
        question: "How many years have you been consistently training?",
        answers: [
            {text: "Less than 1-2years"},
            {text: "2-5years"},
            {text: "5+"},
        ]
    },
    {
        question: "How many days/week can you train?",
        answers: [
            {text: "4 days"},
            {text: "5 days"},
            {text: "6 days"},
        ]
    },
    {
        question: "Do you prefer an upper/lower split or push pull legs split?",
        answers: [
            {text: "Upper Lower"},
            {text: "Push pull legs"},
            {text: "Doesn't matter"},
        ]
    }
]

let startButton = document.getElementsByClassName(".start-btn");

startButton.addEventListener('click',start);

function start(){
    alert("started");
    console.log("started");
}