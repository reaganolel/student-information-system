<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateattedancesRequest;
use App\Http\Requests\UpdateattedancesRequest;
use App\Repositories\attedancesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class attedancesController extends AppBaseController
{
    /** @var  attedancesRepository */
    private $attedancesRepository;

    public function __construct(attedancesRepository $attedancesRepo)
    {
        $this->attedancesRepository = $attedancesRepo;
    }

    /**
     * Display a listing of the attedances.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $attedances = $this->attedancesRepository->all();

        return view('attedances.index')
            ->with('attedances', $attedances);
    }

    /**
     * Show the form for creating a new attedances.
     *
     * @return Response
     */
    public function create()
    {
        return view('attedances.create');
    }

    /**
     * Store a newly created attedances in storage.
     *
     * @param CreateattedancesRequest $request
     *
     * @return Response
     */
    public function store(CreateattedancesRequest $request)
    {
        $input = $request->all();

        $attedances = $this->attedancesRepository->create($input);

        Flash::success('Attedances saved successfully.');

        return redirect(route('attedances.index'));
    }

    /**
     * Display the specified attedances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attedances = $this->attedancesRepository->find($id);

        if (empty($attedances)) {
            Flash::error('Attedances not found');

            return redirect(route('attedances.index'));
        }

        return view('attedances.show')->with('attedances', $attedances);
    }

    /**
     * Show the form for editing the specified attedances.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attedances = $this->attedancesRepository->find($id);

        if (empty($attedances)) {
            Flash::error('Attedances not found');

            return redirect(route('attedances.index'));
        }

        return view('attedances.edit')->with('attedances', $attedances);
    }

    /**
     * Update the specified attedances in storage.
     *
     * @param int $id
     * @param UpdateattedancesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateattedancesRequest $request)
    {
        $attedances = $this->attedancesRepository->find($id);

        if (empty($attedances)) {
            Flash::error('Attedances not found');

            return redirect(route('attedances.index'));
        }

        $attedances = $this->attedancesRepository->update($request->all(), $id);

        Flash::success('Attedances updated successfully.');

        return redirect(route('attedances.index'));
    }

    /**
     * Remove the specified attedances from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attedances = $this->attedancesRepository->find($id);

        if (empty($attedances)) {
            Flash::error('Attedances not found');

            return redirect(route('attedances.index'));
        }

        $this->attedancesRepository->delete($id);

        Flash::success('Attedances deleted successfully.');

        return redirect(route('attedances.index'));
    }
}
