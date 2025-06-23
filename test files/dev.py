import tkinter as tk;
from tkinter import filedialog;
import pygame
import os

class MusicPlayer:
    def __init__(self, master):
        self.master = master
        master.title("Mini Music Player")

        pygame.mixer.init()

        self.playlist = []
        self.current_song_index = -1

        # GUI elements (buttons, listbox, etc.)
        self.play_button = tk.Button(master, text="Play", command=self.play_song)
        self.play_button.pack()

        self.stop_button = tk.Button(master, text="Stop", command=self.stop_song)
        self.stop_button.pack()

        self.load_button = tk.Button(master, text="Load Folder", command=self.load_music)
        self.load_button.pack()

        self.song_listbox = tk.Listbox(master)
        self.song_listbox.pack()

    def load_music(self):
        directory = filedialog.askdirectory()
        if directory:
            self.playlist = [f for f in os.listdir(directory) if f.endswith(".mp3")]
            self.song_listbox.delete(0, tk.END)
            for song in self.playlist:
                self.song_listbox.insert(tk.END, song)

    def play_song(self):
        selected_song_index = self.song_listbox.curselection()
        if selected_song_index:
            self.current_song_index = selected_song_index[0]
            song_path = os.path.join(filedialog.askdirectory(), self.playlist[self.current_song_index])
            pygame.mixer.music.load(song_path)
            pygame.mixer.music.play()

    def stop_song(self):
        pygame.mixer.music.stop()

if __name__ == "__main__":
    root = tk.Tk()
    player = MusicPlayer(root)
    root.mainloop()