function doIt() {
    // Variables for HTML element DOM references.
    var num1Ref, num2Ref, num3Ref, answerRef, definenum;

    // Variables declarations.
    var num1, num2, num3;

    // Get references to DOM elements.
    num1Ref = document.getElementById("num1");
    num2Ref = document.getElementById("num2");
    num3Ref = document.getElementById("num3");
    answerRef = document.getElementById("answer");
    definenum = document.getElementById("definenum");


    // Convert strings to numbers, e.g., "21" to 21.
    num1 = Number(num1Ref.value);
    num2 = Number(num2Ref.value);
    num3 = Number(num3Ref.value);

    // Perform addition operation then assignment operation
    answer = num1 + num2 + num3;

    // Update "answer" label DOM to show result using "innerText" property. innerText is a property of label tag.
    answerRef.innerText = answer;
        if (answer >= 0) {
            // Value of answer is positive.
            // Set the class of the answer label to "positive".
            answerRef.className = "positive";
        }
        else {
            // Value of answer is not positive, i.e., negative.
            // Set the class of the answer label to "negative".
            answerRef.className = "negative";
        }
        if(answer % 2 == 0) {
            definenum.innerText = "(even)";
            definenum.className = "even";
        }
        else {
            definenum.innerText = "(odd)";
            definenum.className = "odd";
        }
}
function SubIt() {
    // Variables for HTML element DOM references.
    var num1Ref, num2Ref, num3Ref, answerRef2, definenum2;

    // Variables declarations.
    var num1, num2, num3;

    // Get references to DOM elements.
    num1Ref = document.getElementById("num4");
    num2Ref = document.getElementById("num5");
    num3Ref = document.getElementById("num6");
    answerRef2 = document.getElementById("answer2");
    definenum2 = document.getElementById("definenum2");


    // Convert strings to numbers, e.g., "21" to 21.
    num1 = Number(num1Ref.value);
    num2 = Number(num2Ref.value);
    num3 = Number(num3Ref.value);

    // Perform addition operation then assignment operation
    answer = num1 - num2 - num3;

    // Update "answer" label DOM to show result using "innerText" property. innerText is a property of label tag.
    answerRef2.innerText = answer;
        if (answer >= 0) {
            // Value of answer is positive.
            // Set the class of the answer label to "positive".
            answerRef2.className = "positive";
        }
        else {
            // Value of answer is not positive, i.e., negative.
            // Set the class of the answer label to "negative".
            answerRef2.className = "negative";
        }
        if(answer % 2 == 0) {
            definenum2.innerText = "(even)";
            definenum2.className = "even";
        }
        else {
            definenum2.innerText = "(odd)";
            definenum2.className = "odd";
        }
}


