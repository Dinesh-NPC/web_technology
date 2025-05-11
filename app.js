const express = require("express");
const mongoose = require("mongoose");
const bodyParser = require("body-parser");

const app = express();
const PORT = 3000;

mongoose.connect("mongodb://127.0.0.1:27017/markListDB");


const studentSchema = new mongoose.Schema({
    name: String,
    rollNo: String,
    marks: Number
});
const Student = mongoose.model("Student", studentSchema);

app.use(bodyParser.urlencoded({ extended: true }));
app.set("view engine", "ejs");

app.get("/", async (req, res) => {
    try {
        const students = await Student.find();
        res.render("index", { students });
    } catch (err) {
        console.error("Error fetching students:", err);
        res.status(500).send("Internal Server Error");
    }
});

app.post("/add", async (req, res) => {
    await new Student({
        name: req.body.name,
        rollNo: req.body.rollNo,
        marks: req.body.marks
    }).save();
    res.redirect("/");
});

app.post("/delete/:id", async (req, res) => {
    await Student.findByIdAndDelete(req.params.id);
    res.redirect("/");
});

app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
});
