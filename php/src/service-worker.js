// service-worker.js

// Event listener for messages from any page
self.addEventListener('message', event => {
    if (event.data && event.data.song_id) {
        // Handle audio playback here
        const songId = event.data.song_id;

        // Play the audio file based on the song_id
        playAudioInBackground(songId);
    }
});

// Function to initiate audio playback
function playAudioInBackground(songId) {
    // Construct the URL of the audio file based on the song_id
    const audioUrl = `${songId}.mp3`;

    // Fetch the audio file and play it
    fetch(audioUrl)
        .then(response => response.arrayBuffer())
        .then(audioData => {
            // Communicate with the main page using the Clients API
            self.clients.matchAll().then(clients => {
                clients.forEach(client => {
                    client.postMessage({ audioData }, [audioData]);
                });
            });
        })
        .catch(error => {
            console.error('Error fetching audio:', error);
        });
}
