const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

const app = express();
const path = require('path');
const port = process.env.PORT || 3000;

// Replace the placeholder connection string with your actual MongoDB connection string
const mongoURI = 'mongodb+srv://johnphilips995:htl8gexGdbRjg9RD@cluster0.vjzqgsj.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';

// Connect to MongoDB
mongoose.connect(mongoURI, { useNewUrlParser: true, useUnifiedTopology: true });
const db = mongoose.connection;

// Define schema and model
const adSchema = new mongoose.Schema({
    description: String,
    // Add more fields as needed
});

const Ad = mongoose.model('Ad', adSchema);

// Middleware to parse incoming request bodies
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Serve static files (your HTML, CSS, etc.)
app.use(express.static(path.join(__dirname, 'public')));

app.get('*', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'home_page', 'index.html'));
});

// Route to handle form submission
app.post('/uploadAd', (req, res) => {
    // Create a new ad object
    const newAd = new Ad({
        description: req.body.description,
        category: req.body.category,
        age: req.body.age,
        otherdets: req.body.otherdets
    });

    // Save the ad to the database
    newAd.save((err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Error saving ad');
        } else {
            res.send('Ad uploaded successfully');
        }
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server running at http://localhost:${3000}`);
});