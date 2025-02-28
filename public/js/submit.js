const handleSubmit = async (event, callback = null) => {
    event.preventDefault();
    // if (loading) {
    //     loading.style.display = "block";
    // }

    const url = event.target.getAttribute("action");
    const formData = new FormData(event.target);

    try {
        const response = await axios.post(url, formData);
        if (response.data.success) {
            if (callback) {
                callback(response.data);
            }
        }
        console.log(response)
    } catch (error) {
        const err = await error;
        if (err.status === 422) {
            const validationErrors = err.response.data.errors;
            const allElement = document.querySelectorAll(".validationErrors");

            allElement.forEach((element) => {
                element.innerText = "";
            });

            Object.entries(validationErrors).forEach(function (errors) {
                const str = errors[0];
                const className = str.includes(".") ? str.split(".")[0] : str;
                const element = document.querySelector(`.${className}`);
                if (element) {
                    element.innerText = errors[1];
                }
            });
        } else if (err.status === 500) {
            const errors = err.response.data;

            console.log(errors);
        }
    } finally {
        // if (loading) {
        //     loading.style.display = "none";
        // }
    }
};
