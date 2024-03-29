// Listen for messages from the main script
onmessage = function(event) {
    if (event.data === 'start') {
        // Perform a time-consuming calculation
        const result = fibonacci(40); // Example time-consuming calculation

        // Send the result back to the main script
        postMessage(result);
    }
};

// Example time-consuming calculation function (Fibonacci sequence)
function fibonacci(n) {
    if (n <= 1) {
        return n;
    }
    return fibonacci(n - 1) + fibonacci(n - 2);
}
