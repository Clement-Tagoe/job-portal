/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spacing: {
                18: "4.5rem",
                100: "28rem",
                124: "30rem",
                126: "31rem",
                128: "32rem",
                130: "33rem",
                132: "34rem",
                134: "36rem",
                136: "38rem",
                138: "40rem",
                140: "42rem",
                142: "44rem",
            },
            width: {
                "68": "19rem",
                "11.5/12": "97%",
            },
            height: {
                "5.5/6": "95%",
            },
        },
    },
    plugins: [],
};
