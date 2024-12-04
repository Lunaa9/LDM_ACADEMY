import { useState, useEffect, useRef } from "react";

function Carrousel() {
  const [cursos, setCursos] = useState([]);
  const [currentIndex, setCurrentIndex] = useState(0);
  const carouselRef = useRef(null);
  const intervalRef = useRef(null);

  const fetchCursos = async () => {
    try {
      const response = await fetch('http://localhost:3000/api/');
      if (!response.ok) {
        throw new Error('Error al obtener los cursos');
      }
      const data = await response.json();
      setCursos(data);
    } catch (error) {
      console.error('Error al obtener los cursos:', error);
    }
  };

  useEffect(() => {
    fetchCursos();
  }, []);

  useEffect(() => {
    const startAutoAdvance = () => {
      intervalRef.current = setInterval(() => {
        nextSlide();
      }, 5000);
    };

    const stopAutoAdvance = () => {
      if (intervalRef.current) {
        clearInterval(intervalRef.current);
      }
    };

    if (carouselRef.current) {
      carouselRef.current.addEventListener('mouseenter', stopAutoAdvance);
      carouselRef.current.addEventListener('mouseleave', startAutoAdvance);
    }

    startAutoAdvance();

    return () => {
      stopAutoAdvance();
      if (carouselRef.current) {
        carouselRef.current.removeEventListener('mouseenter', stopAutoAdvance);
        carouselRef.current.removeEventListener('mouseleave', startAutoAdvance);
      }
    };
  }, [cursos.length]);

  const nextSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex + 1) % cursos.length);
  };

  const prevSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex - 1 + cursos.length) % cursos.length);
  };

  if (cursos.length === 0) {
    return <div className="text-center py-16">Cargando cursos...</div>;
  }

  return (
    <div className="relative overflow-hidden py-16 bg-ghost" id="title-courses" data-aos="fade-up">
      <div className="container mx-auto px-4 space-y-5">
        <h2 className="text-4xl font-extrabold text-center capitalize">Cursos destacados</h2>
        <div className="carousel w-full relative" ref={carouselRef}>
          <div className="overflow-hidden">
            <div
              className="flex transition-transform duration-300 ease-in-out"
              style={{
                transform: `translateX(-${currentIndex * 100}%)`,
                width: `${cursos.length * 100}%`,
              }}
            >
              {cursos.map((curso, index) => (
                <div key={curso.curso_id} className="w-full flex-shrink-0 flex justify-center items-center px-4">
                  <div className="flex space-x-8 items-center">
                    <div className={`card w-64 bg-base-100 shadow-xl transition-all duration-300 rounded-lg ${
                      index === currentIndex ? 'opacity-100 scale-100' : 'opacity-50 scale-90'
                    }`}>
                      <figure>
                        <img src={curso.curso_imagen_url} alt={curso.curso_nombre} className="w-full h-32 object-cover rounded-t-lg" />
                      </figure>
                      <div className="card-body p-4">
                        <h3 className="text-xl font-bold">{curso.curso_nombre}</h3>
                      </div>
                    </div>

                    <div className={`card w-80 bg-base-100 rounded-lg z-10 ${
                      index === currentIndex ? 'opacity-100 scale-100' : 'opacity-50 scale-90'
                    }`}>
                      <figure>
                        <img src={curso.curso_imagen_url} alt={curso.curso_nombre} className="w-full h-48 object-cover rounded-t-lg" />
                      </figure>
                      <div className="card-body">
                        <h2 className="card-title text-orange-400">{curso.curso_nombre}</h2>
                        <p className="text-sm">{curso.curso_descripcion}</p>
                        <p className="text-xs">Escuela: {curso.escuela_nombre}</p>
                        <p className="text-lg font-bold">${curso.curso_precio}</p>
                        <div className="card-actions justify-end">
                          <a href={`/curso/${curso.curso_id}`} className="btn btn-sm btn-primary bg-orange-400 hover:bg-orange-500 border-none rounded-lg">
                            Ver Curso
                          </a>
                        </div>
                      </div>
                    </div>

                    <div className={`card w-64 bg-base-100 shadow-xl transition-all duration-300 rounded-lg ${
                      index === currentIndex ? 'opacity-100 scale-100' : 'opacity-50 scale-90'
                    }`}>
                      <figure>
                        <img src={cursos[(index + 1) % cursos.length].curso_imagen_url} alt="Curso" className="w-full h-32 object-cover rounded-t-lg" />
                      </figure>
                      <div className="card-body p-4">
                        <h3 className="card-title text-sm">{cursos[(index + 1) % cursos.length].curso_nombre}</h3>
                      </div>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
          <button
            onClick={prevSlide}
            className="absolute left-0 top-1/2 transform -translate-y-1/2 btn btn-circle bg-orange-400 hover:bg-orange-500 border-none ml-2 rounded-lg"
            aria-label="Anterior curso"
          >
            ❮
          </button>
          <button
            onClick={nextSlide}
            className="absolute right-0 top-1/2 transform -translate-y-1/2 btn btn-circle bg-orange-400 hover:bg-orange-500 border-none mr-2 rounded-lg"
            aria-label="Siguiente curso"
          >
            ❯
          </button>
        </div>
      </div>
    </div>
  );
}

export default Carrousel;

