import "./bootstrap";
import Alpine from "alpinejs";
import { Calendar } from "@fullcalendar/core";
import timeGridPlugin from "@fullcalendar/timegrid";
import dayGridPlugin from "@fullcalendar/daygrid";
import listPlugin from "@fullcalendar/list";



window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", async function () {
    const calendarEl = document.querySelector("#calendar");

    if (!calendarEl) return;

    try {
        const response = await axios.get("api/events");
        const data = response.data;

        const calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin, timeGridPlugin, listPlugin],
            initialView: "dayGridMonth",
            slotMinTime: "08:00:00",
            slotMaxTime: "20:00:00",
            locale: "fr",
            selectable: true,
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,listWeek",
            },
            eventClick: function (info) {
                const event = info.event;
                $("#bookingModal").modal("toggle");
                const eventId = event.id;
                const eventTitle = event.title;
                const eventDescription = event.extendedProps.description;

                document.getElementById("eventIdInput").value = eventId;
                document.getElementById("eventTitleInput").value = eventTitle;
                document.getElementById("eventDescriptionInput").value =
                    eventDescription;
            },

            editable: true,
            events: data.events,
        });

        calendar.render();
    } catch (error) {
        console.error(
            "Erreur lors de la récupération des données du calendrier :",
            error
        );
    }
});



